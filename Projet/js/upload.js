$(document).ready(function() {

    document.querySelector("#upload").addEventListener("click",(e)=>{
        let input = document.createElement('input')
        input.type="file"
        input.onchange=e=>{
            let file= e.target.files[0]
            let reader= new FileReader()
            reader.readAsDataURL(file)
            reader.onload=readerEvent=>{
                let content=readerEvent.target.result
                document.querySelector("#change_profile").src=content
                document.querySelector("#changepp").src=content
            }
        }

        
        input.click()

        // let img = new Image()
        // img.onload=function(){
        //     let canvas = document.createElement("canvas")
        //     let ctx= canvas.getContext('2d')
        //     canvas.height=this.naturalHeight
        //     canvas.width=this.naturalWIdth
        //     ctx.drawImage(this,0,0)
        //     let dataUrl=canvasTodataUrl(outputFormat)
        //     //fetch
        // }
        // img.src=src
        // if(img.complete || img.complete===undefined)
    })
})