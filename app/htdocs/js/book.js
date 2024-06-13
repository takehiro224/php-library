function deleteUser(id, title) {
    if(!window.confirm('[' + title + '] を削除してもよろしいですか？')) {
        return false;
    } else {
        document.delete_form.id.value = id;
        document.delete_form.submit();
    }
}