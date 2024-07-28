document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("loginForm");

    form.addEventListener("submit", function(event) {
        // Prevent the form from submitting the default way
        event.preventDefault();

        // Perform client-side validation
        const username = document.getElementById("username").value;
        const password = document.getElementById("password").value;
        
        if (username === "" || password === "") {
            alert("Por favor, complete todos los campos.");
            return;
        }

        // If validation passes, submit the form
        form.submit();
    });
});
