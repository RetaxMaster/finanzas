import { defineStore } from 'pinia'

export const useMenuStore = defineStore('menu', {
  
    state: () => ({ 
        opened: false 
    }),

    actions: {

        toggleMenu() {
            this.opened = !this.opened;
        },

        closeMenu() {
            this.opened = false;
        },

        openMenu() {
            this.opened = true;
        },

    },
})