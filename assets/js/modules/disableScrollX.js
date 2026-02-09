export default function disableScrollX() {
  window.addEventListener("load", () => {
    document.body.style.overflowX = "hidden";
  });
}
