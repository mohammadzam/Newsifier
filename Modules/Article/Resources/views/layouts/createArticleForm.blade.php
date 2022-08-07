<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Document</title>

</head>
<body>
<style>
    body{
        background-color: #2e4b62;
    }
    .cdx-button__title {
        margin-bottom: 1rem;
    }

    .cdx-button__container {
        display: flex;
    }

    .cdx-button__input {
        width: 100%;
        margin-bottom: 1.5rem;
    }

    .cdx-button__input:last-child {
        margin-left: 0.75rem;
    }

    .cdx-button__input--checkbox {
        width: 1.5rem;
        height: 1.5rem;
    }

</style>
<h1>Your content</h1>
<form id="create-form" method="post" action="{{ route('test-save') }}">
    @csrf
<div id="editorjs">
</div>
<button type="submit"> Save Article</button>

</form>
<script src="{{asset('landing-assets/js/editor.js')}}"></script>
<script src="{{asset('landing-assets/js/image.js')}}"></script>
<script src="{{asset('landing-assets/js/button.js')
}}"></script>
{{--<script src="https://cdn.jsdelivr.net/npm/@editorjs/simple-image@latest"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/@editorjs/image@2.3.0"></script>--}}
<script src="https://cdn.jsdelivr.net/npm/@editorjs/embed@latest"></script>
{{--<script src="https://cdn.jsdelivr.net/npm/editorjs-button@1.0.4"></script>--}}
<script src="https://cdn.jsdelivr.net/npm/@editorjs/link@2.0.0"></script>

<script>

    const editor = new EditorJS({
        autofocus: true,
        holder:'editorjs',
        paragraph: {
            inlineToolbar: true,
        },
        tools: {
            image: {
                class: ImageTool,
                inlineToolbar: true,
                config: {
                    endpoints: {
                        byFile: 'http://localhost:8000/user/article/upload-test', // Your backend file uploader endpoint
                        byUrl: 'http://localhost:8000/user/article/fetchUrl', // Your endpoint that provides uploading by Url

                    }
                }
            },
            // AnyButton:{
            //     class:AnyButton,
            //     inlineToolbar:false,
            //     config:{
            //         css:{
            //             "btnColor": "btn--gray",
            //         },
            //     },
            //
            // },
            button: {
                class: Button,
            },
        },
    })

    const formElement = document.forms['create-form'];

    formElement.addEventListener('submit', customHandler);

    function customHandler(e) {
        e.preventDefault();
        //....

        var article = document.createElement("input");
        article.setAttribute("type", "hidden");
        article.setAttribute("name", "article");
        editor.save().then((outputData) => {
            console.log('Article data: ',outputData )
            console.log('Article data: ',JSON.stringify(outputData) )
            article.setAttribute("value", JSON.stringify(outputData));
            formElement.appendChild(article)
            formElement.removeEventListener('submit', customHandler);
            formElement.submit();

        }).catch((error) => {
            console.log('Saving failed: ', error)
        });

    }
</script>
</body>
</html>
