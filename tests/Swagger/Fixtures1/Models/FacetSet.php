<?php
namespace SwaggerTests\Fixtures1\Models;

/**
 */
use Swagger\Annotations as SWG;

/**
 * @SWG\Model(id="FacetSet")
 */
class FacetSet
{
    /**
     * @var array
     * @SWG\Property(name="facets", type="array", items="$ref:Facet")
     */
    public $facets;
}
