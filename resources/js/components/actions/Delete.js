import ButtonDelete from "../buttons/ButtonDelete";
import React from "react";
import ReactDOM from "react-dom";
import Swal from "sweetalert2";

function Delete(props) {
	const handleDestroy = () => {
		try {
			Swal.fire({
				title: "Are you sure?",
				text: "You won't be able to revert this!",
				icon: "warning",
				showCancelButton: true,
				confirmButtonColor: "#3085d6",
				cancelButtonColor: "#d33",
				confirmButtonText: "Yes, delete it!",
			}).then((result) => {
				if (result.isConfirmed) {
					axios.delete(props.endpoint).then((response) => {
						Swal.fire("Deleted!", response.data.message, "success").then(
							function () {
								window.location.reload();
							}
						);
					});
				}
			});
		} catch (error) {
			console.log(error.response.data.errors);
		}
	};

	return <ButtonDelete onClick={handleDestroy} />;
}

export default Delete;
if (document.querySelectorAll(".delete")) {
	const deleteNodes = document.querySelectorAll(".delete");
	deleteNodes.forEach((item) => {
		var endpoint = item.getAttribute("endpoint");
		ReactDOM.render(<Delete endpoint={endpoint} />, item);
	});
}
