<template>
    <div class="container-fluid chat-log">
        <div v-for="message in messages">
            <!--Display Sent messages-->
            <div v-if="authId === message.sender_id" class="row message-box">
                <div class="pull-right">
                    <span>{{ message.message }}</span>
                </div>
            </div>
            <!--Display received messages-->
            <div v-if="authId === message.receiver_id" class="row message-box">
                <div class="pull-left">
                    <span>{{ message.message }}</span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
  export default {
    props: ['messages', 'authId'],
  };
</script>

<style scoped>
.chat-log {
    overflow: scroll;
    height: 86vh;
    z-index: -1;
}
.message-box span{
    background-color: #fff;
    border-radius: 10px;
    padding: 10px;
    margin-bottom: 5px;
    display: block;
    border: 1px solid #e8ecef;
}
</style>
