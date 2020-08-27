# What it does?

PSR-6 Cache wants, that you call `->getItem()` to create cache entries. But this call checks again on the cache storage is it existing. This makes the caching little bit slower.