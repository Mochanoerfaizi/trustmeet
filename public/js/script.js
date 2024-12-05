// Filter messages by search query
document.getElementById("search-message").addEventListener("input", function () {
    const query = this.value.toLowerCase();
    const messages = document.querySelectorAll("#message-history > div");

    messages.forEach((message) => {
      const text = message.innerText.toLowerCase();
      if (text.includes(query)) {
        message.style.display = "block";
      } else {
        message.style.display = "none";
      }
    });
  });

  // Delete a single message
  function deleteMessage(button) {
    const message = button.closest("div");
    message.remove();
  }

  // Delete all messages
  function deleteAllMessages() {
    if (confirm("Are you sure you want to delete all messages?")) {
      const messageHistory = document.getElementById("message-history");
      messageHistory.innerHTML = ""; // Clear all messages
    }
  }
