import { useState, useCallback, useMemo  } from "react";
import {
  Card,
  Button,
  FormLayout, 
  TextField,
  Form,
  Combobox,
  Icon,
  Listbox
} from "@shopify/polaris";
import { Toast, useNavigate } from "@shopify/app-bridge-react";
import { ClockMinor, CalendarMinor } from "@shopify/polaris-icons";
import { useAuthenticatedFetch } from "../hooks";

export function ExportCard() {

  const navigate = useNavigate();

  const emptyToastProps = { content: null };const deselectedOptions = useMemo(
    () => [
      {value: '1:00', label: '1:00'},
      {value: '2:00', label: '2:00'},
      {value: '3:00', label: '3:00'},
      {value: '4:00', label: '4:00'},
      {value: '5:00', label: '5:00'},
      {value: '6:00', label: '6:00'},
      {value: '7:00', label: '7:00'},
      {value: '8:00', label: '8:00'},
      {value: '9:00', label: '9:00'},
      {value: '10:00', label: '10:00'},
      {value: '11:00', label: '11:00'},
      {value: '12:00', label: '12:00'},
      {value: '13:00', label: '13:00'},
      {value: '14:00', label: '14:00'},
      {value: '15:00', label: '15:00'},
      {value: '16:00', label: '16:00'},
      {value: '17:00', label: '17:00'},
      {value: '18:00', label: '18:00'},
      {value: '19:00', label: '19:00'},
      {value: '20:00', label: '20:00'},
      {value: '21:00', label: '21:00'},
      {value: '22:00', label: '22:00'},
      {value: '23:00', label: '23:00'},
      {value: '24:00', label: '24:00'},

    ],
    [],
  );
  const [inputValue, setInputValue] = useState('');
  const [options, setOptions] = useState(deselectedOptions);
  const [isLoading, setIsLoading] = useState(false);
  const [toastProps, setToastProps] = useState(emptyToastProps);
  const fetch = useAuthenticatedFetch();
 
  const toastMarkup =
  toastProps.content && !isLoading && (
    <Toast {...toastProps} onDismiss={() => setToastProps(emptyToastProps)} />
  );
  const [newsletter, setNewsletter] = useState(false);
  const [email, setEmail] = useState('');
  const [selectedOption, setSelectedOption] = useState();

  // const handleSubmit = useCallback(() => {
  //   setEmail('');
  //   setNewsletter(false);
    
  // }, []);

  const handleEmailChange = useCallback((value) => {
    setEmail(value);
  }, []);
  const updateSelection = useCallback(
    (selected) => {
      const matchedOption = options.find((option) => {
        return option.value.match(selected);
      });

      setSelectedOption(selected);
      setInputValue((matchedOption && matchedOption.label) || '');
    },
    [options],
  );
  const optionsMarkup =
    options.length > 0
      ? options.map((option) => {
          const {label, value} = option;

          return (
            <Listbox.Option
              key={`${value}`}
              value={value}
              selected={selectedOption === value}
              accessibilityLabel={label}
            >
              {label}
            </Listbox.Option>
          );
        })
      : null;
  const updateText = useCallback(
    (value) => {
      setInputValue(value);

      if (value === '') {
        setOptions(deselectedOptions);
        return;
      }

      const filterRegex = new RegExp(value, 'i');
      const resultOptions = deselectedOptions.filter((option) =>
        option.label.match(filterRegex),
      );
      setOptions(resultOptions);
    },
    [deselectedOptions],
  );

  const handleSubmit = async () => {
    // setEmail('');
    if(email==''){
      alert('Please enter email.');
      return 
    }
    if(inputValue==''){
      alert('Please select schedule time');
      return
    }
    setIsLoading(true);

    try {
      const response = await fetch('/api/export', {
        // method: 'GET',
        // responseType: 'blob', 
        method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                'email': email,
                'time': inputValue
            }),
      });
  
      if (response.ok) {
        // const url = window.URL.createObjectURL(await response.blob());
        // const link = document.createElement('a');
        // link.href = url;
        // link.setAttribute('download', 'users.xlsx');
        // document.body.appendChild(link);
        // link.click();
// heek
        setEmail('');
        setInputValue('');
        setToastProps({ content: "Scheduled successfully!" });
        navigate('/');
      } else {
        const responseData = await response.json();
        console.log(responseData);
        setToastProps({
          content: responseData,
          error: true,
        });
      }
    } catch (error) {
      console.error('Error exporting data:', error);
      setToastProps({
        content: "Error creating schedule!",
        error: true,
      });
    } finally {
      setIsLoading(false);
    } 
  };
  
  return (
    <>
      {toastMarkup}
      <Card title="Schedule inventory tracking" sectioned>
      <Form onSubmit={handleSubmit}>
      <FormLayout>
        <TextField
          value={email}
          onChange={handleEmailChange}
          label="Email"
          type="email"
          placeholder="Example@domain.com"
          autoComplete="email"
          helpText={
            <span>
              We’ll use this email address to send export of inventory.
            </span>
          }
        />
                        <Combobox
                {...inputValue}
                    activator={
                    <Combobox.TextField

                        prefix={<Icon style={{width:10000}} source={ClockMinor}/>}
                        onChange={updateText}
                        label="Schedule time"
                        value={inputValue} /*readOnly*/
                        placeholder="Schedule time"
                        autoComplete="phone"

                        />
                    }
                 >
                    {options.length > 0 ? (
                    <Listbox onSelect={updateSelection}>{optionsMarkup}</Listbox>
                    ) : null}
                </Combobox>

        <Button primary submit icon={<Icon source={CalendarMinor} color="base"/>} loading={isLoading}>Schedule</Button>
      </FormLayout>
    </Form>     
  </Card>
    </>
  );
}
