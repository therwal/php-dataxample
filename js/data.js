let table = document.getElementById("table");

let populateTable = (data) => {
    let str = `<thead><tr>
        <td>Tittel</td>
        <td>Innhold</td>
        <td>Publiserings dato</td>
        <td>Fornavn</td>
        <td>Etternavn</td>
        </tr></thead>
        <tbody>`;
    
    for (let row = 0; row<data.length; row++) {
        str += `<tr>
            <td>${data[row].title}</td>
            <td>${data[row].content}</td>
            <td>${data[row].publish_date}</td>
            <td>${data[row].first_name}</td>
            <td>${data[row].last_name}</td>
        </tr>`;
    }
    str += "</tr></tbody>";
    table.innerHTML = str;
}

       
fetch("read.php")
.then(response => {
   return response.json();
})
.then(jsonResponse => {
    populateTable(jsonResponse);
})
.catch(err => {
    // error 
});