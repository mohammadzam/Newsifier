<html>
<head>
    <meta charset="utf-8">
    <title>Stackfindover: Sign in</title>
    <link rel="stylesheet" type="text/css" href="{{asset('landing-assets/css/upload-article.css')}}" >
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>

<body>

<div class="login-root">
    <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
        <div class="loginbackground box-background--white padding-top--64">
            <div class="loginbackground-gridContainer">
                <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
                    <div class="box-root" style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
                    </div>
                </div>
                <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
                    <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>
                </div>
                <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
                    <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
                </div>
                <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
                    <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
                </div>
                <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
                    <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;"></div>
                </div>
                <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
                    <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>
                </div>
                <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
                    <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
                </div>
                <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
                    <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
                </div>
                <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
                    <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>
                </div>
            </div>
        </div>
        <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
            <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
                <h1><a href="#" rel="dofollow">Create New Article</a></h1>
            </div>
            <div class="formbg">
                <form id="create-form" method="post" action="{{ route('user.store.new.article') }}">
                    @csrf
                    <div class="editor" id="editorjs">
                    </div>

                    <div class="field padding-bottom--24">
                        <button class="sav-btn" type="submit"> Save Article</button>
                    </div>
                </form>
                <div class="field padding-bottom--24">
                    <a class="sav-btn" style="padding: 1px;border-radius: 19px" href="{{route('show.main.page')}}"> Back To Home</a>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="{{asset('landing-assets/js/editor.js')}}"></script>
<script src="{{asset('landing-assets/js/image.js')}}"></script>
<script src="{{asset('landing-assets/js/button.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/embed@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/link@2.0.0"></script>

<script>

    const editor = new EditorJS({
        autofocus: true,
        holder:'editorjs',
        paragraph: {
            inlineToolbar: true,
        },
        tools: {
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
