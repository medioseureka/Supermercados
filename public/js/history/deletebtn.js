document.onreadystatechange = () => {
  const deleteBtn = document.getElementsByClassName("deletebtn");

  for (var i = 0, len = deleteBtn.length; i < len; i++) {
    const btn = deleteBtn[i];
    btn.addEventListener('click', (btn) => deleteFunction(btn));
  }
};

const deleteFunction = (btn) => {
  const id = btn.target.id;
  const form = document.getElementById(`deleteForm-${id}`);
  /* const button = document.getElementById(id);
  const translated = button.getAttribute('data-translated');
  const shure = button.getAttribute('data-shure')*/
  form.submit();

  // TODO: toggle buttons, because one can click one button by mistake

  // if the button has data-shure attribute means it has already been clicked
  /* if (!shure) {
    button.innerText = translated;
    button.setAttribute('data-shure', id);
    return;
  } else {
    form.submit();
  } */
}
