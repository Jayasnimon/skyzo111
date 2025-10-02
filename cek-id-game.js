async function checkNickname() {
  const userId = document.getElementById("userId").value.trim();
  const nickElement = document.getElementById("nick");

  if (!userId) {
    nickElement.innerText = "Isi dulu User ID!";
    nickElement.style.color = "red";
    return;
  }

  nickElement.innerText = "Memeriksa...";
  nickElement.style.color = "#3949ab";

  try {
    const response = await fetch(
      `https://api-cek-id-game-ten.vercel.app/api/check-id-game?type_name=free_fire&userId=${userId}`
    );
    const data = await response.json();

    if (data.status === "success" && data.nickname) {
      nickElement.innerText = data.nickname;
      nickElement.style.color = "#3949ab";
    } else {
      nickElement.innerText = "ID tidak ditemukan!";
      nickElement.style.color = "red";
    }
  } catch (error) {
    nickElement.innerText = "Terjadi kesalahan!";
    nickElement.style.color = "red";
    console.error(error);
  }
}