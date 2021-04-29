
function generateCard(newRow, contentType, content_list) {

    var content_row, content_column, content_link, content_title_div, content_title, content_image;


    //console.log(content_list);
    if (newRow == 1) {
        // create a new row <div>
        content_row = document.createElement('div');
        content_row.setAttribute('class', 'row');
    } else {
        // return the last row <div> tag
        content_row = content_list.children[content_list.children.length - 1]
    }
    //console.log(content_row);
    content_column = document.createElement('div');
    content_link = document.createElement('a');
    content_title_div = document.createElement('div');
    content_title = document.createElement('p');
    content_image = document.createElement('img');

    // add required attributes  
    content_column.setAttribute('class', 'content-wrap col-lg-3 col-md-3 col-sm-6 col-xs-12 col-centered');
    content_link.setAttribute('href', '#');
    content_image.setAttribute('src', 'https://via.placeholder.com/150');

    // add title
    if(contentType == 'Movie') {
        content_title.textContent = 'Movie Title';
    } else {
        content_title.textContent = 'TV Show Title';
    }
    

    // Append link to row
    content_link.appendChild(content_image);
    content_column.appendChild(content_link);

    //content_link.removeChild(content_image);

    // create title card
    content_title_div.appendChild(content_title);

    // add title to the link
    content_link.appendChild(content_title_div);

    // Content column
    content_column.appendChild(content_link);

    // Append to row
    content_row.appendChild(content_column);

    // Append to list
    content_list.appendChild(content_row);

}

var generateCards = function(contentType, content_list) {

    // get the content-list
    var loop = 1;
    while (loop <= 20) {
        if (loop % 4 == 1) {
            generateCard(1, contentType, content_list)
        } else {
            generateCard(0, contentType, content_list);
        }
        loop++;
    }
}

