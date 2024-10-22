const form = document.querySelector("form[validate]");

form.addEventListener("submit", e => {
    e.preventDefault();
    Neo.Validator.validate(form, {
        ...([...document.querySelectorAll("[rules]")].reduce((carry, item) => {
            carry.rules[item.name] = (item.getAttribute("rules") || "").split("|");
            return carry;
        }, { rules: {}, message: { failure: {} } })),
        failure(field, __, message) {
            field.classList.add("outline", "outline-2", "-outline-offset-2", "outline-red-400");
            field.nextElementSibling.classList.remove("hidden");
        },
        success(field) {
            field.classList.remove("outline", "outline-2", "-outline-offset-2", "outline-red-400");
            field.nextElementSibling.classList.add("hidden");
        },
        execute() {
            form.submit();
        }
    });
});