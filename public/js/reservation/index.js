TableVisualizer($query("neo-datavisualizer"), ({
    csrf,
    scene,
    clear
}) => [{
    name: "excursion",
    text: $trans("Excursion"),
    bodyRender: (row) => $capitalize(row.excursion),
    bodyPdfRender: function(row) {
        return this.bodyRender(row);
    },
    bodyCsvRender: function(row) {
        return this.bodyRender(row);
    },
}, {
    name: "full_name",
    text: $trans("Full name"),
    bodyRender: (row) => row.last_name.toUpperCase() + " " + $capitalize(row.first_name),
    bodyPdfRender: function(row) {
        return this.bodyRender(row);
    },
    bodyCsvRender: function(row) {
        return this.bodyRender(row);
    },
}, {
    name: "email",
    text: $trans("Email"),
}, {
    name: "phone",
    text: $trans("Phone"),
}, {
    name: "country",
    text: $trans("Country"),
    headStyle: { width: 20, textAlign: "center" },
    bodyStyle: { width: 20, textAlign: "center" },
    headPdfStyle: function() {
        return this.headStyle
    },
    bodyPdfStyle: function() {
        return this.bodyStyle;
    },
    bodyRender: (row) => $capitalize($trans(row.country)),
    bodyPdfRender: function(row) {
        return this.bodyRender(row);
    },
    bodyCsvRender: function(row) {
        return this.bodyRender(row);
    },
}, {
    name: "date",
    text: $trans("Date"),
    bodyRender: (row) => $moment(row.date, 'dddd dd mmmm yyyy'),
    bodyPdfRender: function(row) {
        return this.bodyRender(row);
    },
    bodyCsvRender: function(row) {
        return this.bodyRender(row);
    },
}, {
    name: "pick_up_location",
    text: $trans("Pick-up location"),
    headStyle: { width: 140, textAlign: "center" },
    bodyStyle: { width: 140, textAlign: "center" },
    headPdfStyle: function() {
        return this.headStyle
    },
    bodyPdfStyle: function() {
        return this.bodyStyle;
    },
    bodyRender: (row) => $capitalize($trans(row.pick_up_location)),
    bodyPdfRender: function(row) {
        return this.bodyRender(row);
    },
    bodyCsvRender: function(row) {
        return this.bodyRender(row);
    },
}, {
    name: "number_of_people",
    text: $trans("Number of people"),
    headStyle: { width: 160, textAlign: "center" },
    bodyStyle: { width: 160, textAlign: "center" },
    headPdfStyle: function() {
        return this.headStyle
    },
    bodyPdfStyle: function() {
        return this.bodyStyle;
    },
    bodyRender: (row) => row.number_of_people,
    bodyPdfRender: function(row) {
        return this.bodyRender(row);
    },
    bodyCsvRender: function(row) {
        return this.bodyRender(row);
    },
}, {
    visible: false,
    name: "message",
    text: $trans("Message"),
    bodyRender: (row) => row.message ? $capitalize(row.message) : empty(),
    bodyPdfRender: function(row) {
        return this.bodyRender(row);
    },
    bodyCsvRender: function(row) {
        return this.bodyRender(row);
    },
}, {
    name: "action",
    text: $trans("Actions"),
    headStyle: { width: 20, textAlign: "center" },
    bodyStyle: { width: 20, textAlign: "center" },
    bodyRender: (row) => `<action-tools target="${row.id}"csrf="${csrf}"scene="${scene}"clear="${clear}"></action-tools>`,
    headPdfStyle: function() {
        return this.headStyle
    },
    bodyPdfStyle: function() {
        return this.bodyStyle;
    },
    bodyPdfRender: () => empty(),
    bodyCsvRender: () => empty(),
}]);