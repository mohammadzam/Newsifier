/**
 * Build styles
 */
// require('./index.css').toString();

/**
 * Button Tool for the Editor.js
 *
 * Allows to add a button.
 */
class Button {
    /**
     * Returns true to notify the core that read-only mode is supported
     *
     * @return {boolean}
     */
    static get isReadOnlySupported() {
        return true;
    }

    /**
     */
    constructor({data, api, block}) {
        this.data = data || {};
        this.api = api;
        this.block = block

        this.CSS = {
            title: "cdx-button__title",
            container: "cdx-button__container",
            input: "cdx-button__input",
            inputCheckbox: "cdx-button__input--checkbox",
        };
    }

    /**
     * Create Input field
     * @param id
     * @param type
     * @param inputLabel
     * @param inputPlaceholder
     * @return {HTMLElement}
     * @private
     */
    createInput(id, type, inputLabel, inputPlaceholder) {
        const inputWrapper = document.createElement('div');
        const label = document.createElement('label')
        const input = document.createElement('input');

        input.type = type;
        input.placeholder = inputPlaceholder;
        input.id = id;
        label.innerText = inputLabel;
        inputWrapper.classList.add(this.CSS.input);
        inputWrapper.appendChild(label);
        inputWrapper.appendChild(input);



        return inputWrapper;
    }
    selectedImage=""
 /**
     * Create Input field
     * @param id
     * @param type
     * @param inputLabel
     * @param inputPlaceholder
     * @return {HTMLElement}
     * @private
     */
    createButton(id, label) {
        const button = document.createElement('button');
        button.setAttribute("type", "button");

     button.innerText=label
     let block = this.block;
     let api = this.api;
     console.log(this.block)
     this.block.save();
     $(document).on('click', '.gif-image', function () {
         let imageUrl= $(this).attr('src')



   let result= $("#inner-container").siblings('#result');
         $("#inner-container").remove();
         result.html("<img class='gif-image' width='100' height='100' src='"+imageUrl+"' />")
     });
     $(button).click(function () {
         console.log('clicked')
         let imageWapper = $(this).closest('#inner-container').children('#images-wrapper').first();
         searchGif(imageWapper,$('#query').val());
     });







        return button;
    }
    /**
     *
     * @param block
     * @returns {{label: string, url: string}}
     */
    save(block){
        console.log($('.gif-image').last().attr('src'));
        return {
            url: $('.gif-image').last().attr('src'),
        }
    }


    /**
     * Create button element for Toolbar
     *
     * @return {HTMLElement}
     */
    render() {
        const title = document.createElement('h4')
        const wrapper = document.createElement('div');

        const resultWrapper = document.createElement('div');
        resultWrapper.setAttribute("id", "result");
        const innerContainer = document.createElement('div');
        innerContainer.setAttribute("id", "inner-container");

        const imagesContainer = document.createElement('div');
        imagesContainer.setAttribute("id", "images-wrapper");
        const urlInput = this.createInput('query', 'text', this.api.i18n.t('Text For Search'), this.api.i18n.t('Text For Search'))
        const searchBtn = this.createButton('search', 'Search')

        title.innerText = this.api.i18n.t('EditorJs GIF Plugin To Search GIF On Giphy Site')
        title.classList.add(this.CSS.title)

        wrapper.classList.add('cdx-personality', this.api.styles.block)
        innerContainer.appendChild(title);
        innerContainer.appendChild(urlInput);
        innerContainer.appendChild(searchBtn);
        innerContainer.appendChild(imagesContainer);

        wrapper.appendChild(resultWrapper);
        wrapper.appendChild(innerContainer);


        return wrapper;
    }

    /**
     *
     * @param block
     * @returns {{label: string, url: string}}
     */



    /**
     * Get Tool toolbox settings
     * icon - Tool icon's SVG
     * title - title to show in toolbox
     *
     * @return {{icon: string, title: string}}
     */
    static get toolbox() {
        return {
            icon: '<svg width="19" height="15" viewBox="0 0 19 15" fill="none" xmlns="http://www.w3.org/2000/svg">\n' +
                '<path fill-rule="evenodd" clip-rule="evenodd" d="M3.66667 3.125C3.36751 3.125 3.125 3.36751 3.125 3.66667V12C3.125 12.2992 3.36751 12.5417 3.66667 12.5417H15.3333C15.6325 12.5417 15.875 12.2992 15.875 12V3.66667C15.875 3.36751 15.6325 3.125 15.3333 3.125H3.66667ZM0.875 3.66667C0.875 2.12487 2.12487 0.875 3.66667 0.875H15.3333C16.8751 0.875 18.125 2.12487 18.125 3.66667V12C18.125 13.5418 16.8751 14.7917 15.3333 14.7917H3.66667C2.12487 14.7917 0.875 13.5418 0.875 12V3.66667ZM9.5 4.20837C10.1213 4.20837 10.625 4.71205 10.625 5.33337V6.70837H12C12.6213 6.70837 13.125 7.21205 13.125 7.83337C13.125 8.45469 12.6213 8.95837 12 8.95837H10.625V10.3334C10.625 10.9547 10.1213 11.4584 9.5 11.4584C8.87868 11.4584 8.375 10.9547 8.375 10.3334V8.95837H7C6.37868 8.95837 5.875 8.45469 5.875 7.83337C5.875 7.21205 6.37868 6.70837 7 6.70837H8.375V5.33337C8.375 4.71205 8.87868 4.20837 9.5 4.20837Z" fill="currentColor"/>\n' +
                '</svg>\n',
            title: 'GIF',
        };
    }
}
 function  searchGif(imageWapper,query){

    console.log("searching")
    let imgs= getGiphy(query,1)
     imageWapper.html(imgs);

}

offset = 0;
// initial value for offset
offsetVal = 0;
// set your limit
giphyLimit = 36;

function  getGiphy (query,i){
    // if offset is greater than one then fetch further items prior to previous ones
    if (i > 0){
        // increase the offset with item limit like 25, 50 to get the next items
        offsetVal = giphyLimit*i;
    }

    var images="";

     $.ajax({
        url: 'https://api.giphy.com/v1/gifs/search?',
        type: 'GET',
        dataType: 'json',
         async: false,
        data: {q:query,api_key:'h0gpeYOH4l6X2FrAXrl9D8pu3X2ReXp3', limit: giphyLimit, offset: offsetVal},
        success: (data) => {
            $.each(data['data'], ( index, value) => {
                let imageUrl = value['images']['original']['url'];
                images +="<img class='gif-image' width='100' height='100' src='"+imageUrl+"' />";
            })
            // increase offset to get further items.
            offset = offset+1;


        }
    })
    console.log(1)
    console.log(images)
    return images;

}

module.exports = Button;
