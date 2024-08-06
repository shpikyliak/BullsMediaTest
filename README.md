This app is an example of resolving delivery services. For instance, to call the resolve method, I’m using an API call, but this can be changed to another method if needed. To simplify the logic, I haven’t implemented the logic for sending data to the service; however, there is a designated place to store the necessary data, whether as a response, request, or both. Additionally, there can be a logging mechanism for easier error handling.

I assume that the delivery slug comes as a URL parameter, but it can also be included in the request body. I utilize route binding to dependency inject the resolver, isolating the controller from the instantiation logic.

To expand for another delivery service, you need to implement the DeliveryInterface and add a new class to the DeliveryResolver in the resolveData method.

The prepareData method is used to prepare data for the delivery service, providing a place to modify the data according to the specific needs of the service. The send method is responsible for sending the prepared data to the delivery service, where error handling and logging can also take place.
