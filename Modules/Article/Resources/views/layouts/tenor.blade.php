<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

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
<div id="editorjs">
</div>
<button> Save Article</button>

<script src="{{asset('landing-assets/js/editor.js')}}"></script>
<script src="{{asset('landing-assets/js/image.js')}}"></script>
<script src="{{asset('landing-assets/js/button.js')}}"></script>
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
</script>
</body>
</html>
