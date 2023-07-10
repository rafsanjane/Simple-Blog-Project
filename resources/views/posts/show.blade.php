<article class="blog-post px-3 py-5 p-md-5">
    <div class="container single-col-max-width">
        <header class="blog-post-header">
            <h2 class="title mb-2">{{ $post->title }}</h2>
        </header>

        <div class="blog-post-body">

            <p>{{ $post->content }}</p>

        </div>
        <!--//blog-comments-section-->

    </div>
    <!--//container-->
</article>

<script>
    // Retrieve blog posts
axios.get('/posts')
    .then(response => {
        // Handle the response data
        const posts = response.data;
        console.log(posts);
        // Display the posts on the page or perform any other actions
    })
    .catch(error => {
        // Handle the error
        console.error(error);
    });

// Submit a comment
const commentForm = document.getElementById('comment-form'); // Assuming you have a comment form in your view
commentForm.addEventListener('submit', event => {
    event.preventDefault(); // Prevent the form from submitting normally

    const formData = new FormData(commentForm); // Get the form data
    const postId = commentForm.dataset.postId; // Assuming you have a data attribute 'data-post-id' in your form
    const commentData = {
        post_id: postId,
        name: formData.get('name'),
        email: formData.get('email'),
        content: formData.get('content')
    };

    axios.post('/comments', commentData)
        .then(response => {
            // Handle the response, e.g., display a success message
            console.log(response.data);
        })
        .catch(error => {
            // Handle the error, e.g., display an error message
            console.error(error);
        });
});

</script>