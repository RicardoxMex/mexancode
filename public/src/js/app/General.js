import Alpine from "alpinejs"

export function General() {
    return {
        content_table: this.$persist(false),
        init(){
            console.log(this.content_table)
        },
        changeTypeContent(){
            this.content_table = !this.content_table
        }
    }
}