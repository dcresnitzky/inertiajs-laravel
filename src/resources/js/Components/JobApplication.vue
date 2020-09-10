<template>
    <form class="w-full max-w-lg" v-on:submit.prevent>
        <h1>Candidatar-se</h1>
        <div class="flex flex-wrap -mx-3 mb-6 mt-4">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs mb-2" for="grid-name">
                    Nome
                </label>
                <input v-model="form.name"
                       class="text-sm appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                       type="text" placeholder="Seu nome..." id="grid-name">
                <p v-if="$page.errors.name" class="text-red-500 text-xs italic">{{ $page.errors.name[0] }}</p>
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs mb-2" for="grid-email">
                    Email
                </label>
                <input v-model="form.email"
                       class="text-sm appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                       type="text" placeholder="Seu email..." id="grid-email">
                <p v-if="$page.errors.email" class="text-red-500 text-xs italic">{{ $page.errors.email[0] }}</p>
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs mb-2" for="grid-phone">
                    Telefone
                </label>
                <input v-model="form.phone"
                       class="text-sm appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                       type="text" placeholder="Seu telefone com ddd..." id="grid-phone">
                <p v-if="$page.errors.phone" class="text-red-500 text-xs italic">{{ $page.errors.phone[0] }}</p>
            </div>
            <div class="w-full md:w-full px-3 mb-6">
                <label class="block uppercase tracking-wide text-gray-700 text-xs mb-2" for="grid-attachment">
                    Curriculum
                </label>
                <input v-on:change="handleFileUpload()"
                    class="text-sm appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    type="file" ref="attachmentRef" id="grid-attachment">
                <p v-if="$page.errors.attachment" class="text-red-500 text-xs italic">{{
                        $page.errors.attachment[0]
                    }}</p>
            </div>
            <input v-model="form.job_position_id" class="hidden" type="hidden"/>
            <div class="w-full px-3">
                <button v-on:click="reset"
                        class="float-left border rounded pointer inline-block bg-gray-100 text-gray-700 px-10 py-2 hover:text-gray-600 focus:outline-none">
                    Limpar
                </button>
                <button :disabled="sending"
                        v-on:click="send"
                        class="float-right rounded pointer inline-block bg-primary text-white px-10 py-2 hover:text-gray-100 focus:outline-none disabled:opacity-50">
                    Enviar
                </button>
            </div>
        </div>
    </form>
</template>

<script>

export default {
    props: {
        job: Object,
    },

    data() {
        return {
            sending: false,
            form: {
                name: '',
                email: '',
                phone: '',
                attachment: '',
                job_position_id: this.job.id
            }
        }
    },

    methods: {
        send: async function () {
            let formData = new FormData()

            formData.append('name', this.form.name || '')
            formData.append('email', this.form.email || '')
            formData.append('phone', this.form.phone || '')
            formData.append('attachment', this.form.attachment || '')
            formData.append('job_position_id', this.form.job_position_id || '')

            try {
                this.sending = true;

                await this.$inertia.post(this.route('apply'), formData, {
                    replace: false,
                    preserveState: true,
                    preserveScroll: true,
                    only: [],
                    headers: {},
                })

                this.$toasted.show('Você se candidatou, aguarde novidades!')
                this.reset()

            } catch(error) {
                console.log(error);
                this.$toasted.show('Ops, ocorreu um erro ao tentar candidatar-se')
            }
            this.sending = false;
        },

        reset: function () {
            this.$page.errors = '';
            this.form.name = ''
            this.form.phone = ''
            this.form.email = ''
            this.$refs.attachmentRef.value = null;
        },

        handleFileUpload(){
            this.form.attachment = this.$refs.attachmentRef.files[0];
        }
    }
}
</script>
