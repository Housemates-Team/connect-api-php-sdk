# Housemates Connect API

[![Latest Version on Packagist](https://img.shields.io/packagist/v/housemates/connect-api.svg?style=flat-square)](https://packagist.org/packages/housemates/connect-api)
[![Total Downloads](https://img.shields.io/packagist/dt/housemates/connect-api.svg?style=flat-square)](https://packagist.org/packages/housemates/connect-api)

The Housemates Connect API provides a set of endpoints to access and interact with the Housemates Connect platform. It
enables developers to programmatically retrieve property and room information, manage bookings, create enquiries, and
obtain various details related to cities and amenities.

## Key Features

- **Property Management:** Retrieve property listings and details, including amenities, location, and availability.
- **Room Management:** Access room information, including pricing, availability, and booking periods.
- **Booking Operations:** Start and complete the checkout process, including handling payment details and resident
  information.
- **Enquiry Management:** Create and retrieve enquiries for specific rooms or properties.
- **City Information:** Obtain university information about cities.
- **Amenity Details:** Retrieve a list of available amenities and their descriptions.

## Installation

You can install the package via composer:

## Prerequisites

- At least PHP 7.4 installed on your system.
- Housemates Connect API credentials:
    - **Host**: `http://localhost:8060`
    - **Access Token**: `b2fcrSRUV8OsN6Yn79UKGIiGDCLUJtGqEL3m2aO4`
    - **API Partner ID**: `01H0N04529EXND84J5AN2ZH7CX`

```bash
composer require housemates/connect-api
```

## Getting Started

### Configuration

In order to use the Housemates Connect API, you must first configure the package with your API credentials. You can do
so as follows;

```php
$configuration = new \Housemates\ConnectApi\Configuration();
$configuration->setHost('http://localhost:8060')
    ->setAccessToken('b2fcrSRUV8OsN6Yn79UKGIiGDCLUJtGqEL3m2aO4')
    ->setApiPartnerId('01H0N04529EXND84J5AN2ZH7CX');

$connectApi = new Housemates\ConnectApi\ApiClient($configuration);
```

You can now use the `$connectApi` instance to access the various endpoints provided by the API.

#### Get Properties

You can get properties by calling the `getProperties` method on the `$connectApi` instance. This method accepts an
optional `$query` parameter, which can be used to filter the results. For example, to get properties in Manchester, you
can do the following;

```php
$filters = new \Housemates\ConnectApi\Filters\PropertyFilter();
$filters->setCityFilter('manchester')
try{
    $results = $connectApi->getProperties($filters);
    print_r($results->getData()->getItems());
} catch (\Exception $e) {
    // Handle exception
}
```

Please refer to the documentation for a full list of available filters.

#### Get Property

A single property can be retrieved by calling the `getProperty` method on the `$connectApi` instance. This method
accepts
a property ID as a parameter. For example, to get the property with ID `01H0N04529EXND84J5AN2ZH7CX`, you can do the
following;

```php
try{
    $property = $connectApi->getProperty('01H0N04529EXND84J5AN2ZH7CX');
    print_r($property->getData()->getItem());
} catch (\Exception $e) {
    // Handle exception
}
```

#### Get Rooms

You can get rooms by calling the `getRooms` method on the `$connectApi` instance. This method accepts an optional
`$query` parameter, which can be used to filter the results. For example, to get rooms in within a certain price range
e.g. £100 to £400, you can do the following;

```php
$filters = new \Housemates\ConnectApi\Filters\RoomFilter();
$filters->setPriceRangeFilter('[100,400]'); // Please note that the price range must be in the format [min,max]

try{
    $results = $connectApi->getRooms($filters);
    print_r($results->getData()->getItems());
} catch (\Exception $e) {
    // Handle exception
}
```

If you want to sort the results, you can do so by passing a `Sort` object to the `getRooms` method. For example, to sort
the results by price in ascending order, you can do the following;

```php
$filters = new \Housemates\ConnectApi\Filters\RoomFilter();
$filters->setPriceRangeFilter('[100,400]'); // Please note that the price range must be in the format [min,max]

$sort = new \Housemates\ConnectApi\Sort();
$sort->setSortBy('price', 'asc');

try{
    $results = $connectApi->getRooms($filters, $sort);
    print_r($results->getData()->getItems());
} catch (\Exception $e) {
    // Handle exception
}
```

#### Get Room

To get a single room, you can call the `getRoom` method on the `$connectApi` instance. This method accepts a room ID as
a parameter. For example, to get the room with ID `01H0N04529EXND84J5AN2ZH7CX`, you can do the following;

```php
try{
    $room = $connectApi->getRoom('01H0N04529EXND84J5AN2ZH7CX');
    print_r($room->getData()->getItem());
} catch (\Exception $e) {
    // Handle exception
}
```

### Get Booking periods for a room

To get booking periods for a room, you can call the `getBookingPeriods` method on the `$connectApi` instance. This
method accepts a room ID as a parameter. For example, to get the booking periods for the room with
ID `01H0N04529EXND84J5AN2ZH7CX`, you can do the following;

```php
try{
    $bookingPeriods = $connectApi->getBookingPeriods('01H0N04529EXND84J5AN2ZH7CX');
    print_r($bookingPeriods->getData()->getItems());
} catch (\Exception $e) {
    // Handle exception
}
```

### Start Checkout

To start the checkout process, you can call the `startCheckout` method on the `$connectApi` instance. This method
accepts a room ID, booking period ID and Operator ID as parameters. For example, to start the checkout process for the
room with ID `01H0N7WS7ZN1DGEJFF2C14K8NJ`, you can do the following;

```php
$checkoutStartRequest = new \Housemates\ConnectApi\Requests\CheckoutStartRequest();
$checkoutStartRequest
    ->setRoomId('01H0N7WS7ZN1DGEJFF2C14K8NJ')
    ->setBookingPeriodId('01H1TQKHVCN2F00MP2D7ACX6S8')
    ->setOperatorId('9258a234-f90b-4871-b434-247087fec215');
try{
    $checkoutStartResponse = $connectApi->startCheckout($checkoutStartRequest);
    print_r($checkoutStartResponse->getData()));
} catch (\Exception $e) {
    // Handle exception
}
```

Please refer to the documentation for a full list of endpoints.

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

### Security

If you discover any security related issues, please email muhammad@housemates.io instead of using the issue tracker.

## Credits

- [Muhammad Ali Shah](https://github.com/housemates)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

