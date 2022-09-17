<template>
    
    <div class="double-input">
        <slot></slot>
    </div>

</template>

<style lang="scss">

.double-input {

    display: flex;

    .input-container {

        width: 50%;
        
        &:nth-child(1) {
            padding-right: 10px;
        }
    }

}

</style>