

import ReactNotification, { store } from "react-notifications-component";
import {Alert} from 'react-bootstrap';

function AlertDismissible(props) {
    const [showAlert, setShowAlert] = useState(true);


    let variant = props.type;
    return (
        <Alert
            variant={variant}
            onClose={() => setShowAlert(false)}
            dismissible
        >
            <Alert.Heading>Oh snap! You got an error!</Alert.Heading>
            <p>
                Change this and that and try again. Duis mollis, est non commodo
                luctus, nisi erat porttitor ligula, eget lacinia odio sem nec
                elit. Cras mattis consectetur purus sit amet fermentum.
            </p>
        </Alert>
    );
}


function notify(title, message, type = "success") {
        store.addNotification({
            title: title,
            message: message,
            type: type,
            insert: "top",
            container: "top-right",
            animationIn: ["animate__animated", "animate__fadeIn"],
            animationOut: ["animate__animated", "animate__fadeOut"],
            dismiss: {
                duration: 2000,
                onScreen: true,
            },
        });
    }