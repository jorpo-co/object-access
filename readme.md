# Object Access

Really stupid simple object property access using magic methods. Each case builds on the others.


## trait ObjectAccess

Applies really simple access to object properties that may be private or protected. Pretty obvious really.


## trait ImmutableObjectAccess

Does what it says on the tin. Properties cannot be set or unset using magic methods.


## trait SetOnceObjectProperties

Allows properties to be set only once using magic methods. This is like read only properties in other maguages (and in PHP 8.1).


## trait CallableObjectProperties

Allows object properties to be accessed by calling them as a method. Can do get and set style.


## trait SetOnceCallableObjectProperties

Same as above but only allows setting to happen once.
