function showCansel() {
  document.querySelector("#updateForm").style.display = "none";
  document.querySelector(".TopicHead").style.display = "none";
  document.querySelector(".deleteBtn").style.display = "none";
  document.getElementById("form2").style.display = "block";
  document.getElementById("PostUpdateBtn").style.display = "block";
}

function PostUpdate() {
  document.querySelector("#updateForm").style.display = "block";
  document.querySelector(".TopicHead").style.display = "block";
  document.querySelector(".deleteBtn").style.display = "block";
  document.getElementById("form2").style.display = "none";
  document.getElementById("PostUpdateBtn").style.display = "none";

}