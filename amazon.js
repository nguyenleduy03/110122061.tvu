document.getElementById('write-journal').addEventListener('mouseover', function() {
    document.getElementById('journal-options').classList.remove('hidden');
});

document.getElementById('write-journal').addEventListener('mouseleave', function() {
    document.getElementById('journal-options').classList.add('hidden');
});
