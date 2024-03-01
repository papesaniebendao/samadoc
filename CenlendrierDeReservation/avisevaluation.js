document.getElementById('commentForm').addEventListener('submit', function(event) {
    event.preventDefault();

    var name = document.getElementById('name').value;
    var comment = document.getElementById('comment').value;

    if (name && comment) {
        var commentDiv = document.createElement('div');
        commentDiv.className = 'comment';
        commentDiv.innerHTML = '<h3>' + name + '</h3><p>' + comment + '</p>';

        document.getElementById('comments').appendChild(commentDiv);

        document.getElementById('name').value = '';
        document.getElementById('comment').value = '';
    }
});
