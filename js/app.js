window.onload = function(){
  const jkmodebtn = document.querySelector('#jkbtnPopup');
  const jkmodal = document.querySelector('#modalJK');
  const closeModel = document.querySelector('#closeModel');

  jkmodebtn.addEventListener('click', ModelJKOpen);
  closeModel.addEventListener('click', ModeljkClosebtn);


  function ModelJKOpen(){
    jkmodal.style.display = 'block';
  }

  function ModeljkClosebtn(){
    jkmodal.style.display = 'none';
  }

}