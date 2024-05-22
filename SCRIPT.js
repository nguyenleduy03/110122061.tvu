// SCRIPT.js
document.addEventListener("DOMContentLoaded", function() {
    // Gửi yêu cầu Ajax để lấy danh sách tiêu đề nhật ký
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "get_journals.php", true);
    xhr.onload = function() {
        if (xhr.status == 200) {
            var journals = JSON.parse(xhr.responseText);
            displayJournals(journals);
        }
    };
    xhr.send();
});

// Hàm hiển thị danh sách tiêu đề nhật ký
function displayJournals(journals) {
    var ul = document.createElement("ul");
    journals.forEach(function(journal) {
        var li = document.createElement("li");
        var a = document.createElement("a");
        a.href = "journal_detail.php?id=" + journal.id;
        a.textContent = journal.title;
        li.appendChild(a);
        ul.appendChild(li);
    });
    document.body.appendChild(ul);
}
