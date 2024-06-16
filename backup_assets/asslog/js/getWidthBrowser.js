function getWidthBrowser(el){
    let element = document.querySelector(el)
    let width = element.offsetWidth
    if(width < 1333 ){
        console.log('Resolution HD')
        return 'HD'
    }else if(width < 1530){
        console.log('Resolution FULL HD')
        return 'FHD'
    }
}