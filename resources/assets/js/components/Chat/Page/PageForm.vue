<template>
    <div v-if="admin">
        <div class="input-group">
            <input id="btn-input" type="text" name="message" class="form-control" placeholder="Mesaj yaz admin kardeş..." v-model="newMessage" @keyup.enter="sendMessageAsPage">

            <span class="input-group-btn">
                <button class="btn btn-info" id="btn-chat" @click="sendMessageAsPage">
                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                </button>
            </span>
        </div>
    </div>
    <div v-else>
        <div class="input-group">
            <input id="btn-input" type="text" name="message" class="form-control" placeholder="Mesaj yaz..." v-model="newMessage" @keyup.enter="sendMessageAsUser">

            <span class="input-group-btn">
                <button class="btn btn-info" id="btn-chat" @click="sendMessageAsUser">
                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                </button>
            </span>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['pageId', 'userId', 'authId', 'dataName'],

        created() {
            if (this.authId !== this.userId) {
                this.admin = true;
            }
        },

        data() {
            return {
                newMessage: '',
                admin: false,
            }
        },

        methods: {
            sendMessageAsUser() {
                this.$emit('messagesentuser', {
                    message: this.newMessage,
                    sender_id: this.authId,
                    page_id: this.pageId,
                });

                this.newMessage = ''
            },
            sendMessageAsPage() {
                this.$emit('messagesentpage', {
                    message: this.newMessage,
                    page_id: this.pageId,
                    //sender_id: this.authId,
                    receiver_id: this.userId,
                    sender_name: this.dataName
                });

                this.newMessage = ''
            },
        }
    }
</script>

<style scoped>
    .input-group {
        margin-bottom: 25px;
    }
    .input-group button, .input-group input{
        border-radius: 0px;
    }
</style>
