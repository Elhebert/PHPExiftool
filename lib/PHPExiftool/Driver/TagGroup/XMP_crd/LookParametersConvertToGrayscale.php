<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_crd;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LookParametersConvertToGrayscale extends AbstractTagGroup
{
    protected string $id = 'XMP-crd:LookParametersConvertToGrayscale';

    protected string $name = 'LookParametersConvertToGrayscale';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Look Parameters Convert To Grayscale',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crd
             * line : 283077
             * type : string
             * writable : true
             * count :
             * flags : avoid,flattened
             */
            'id' => 'XMP::crd.XMP-crd:LookParametersConvertToGrayscale',
            'desc' => [
                'en' => 'Look Parameters Convert To Grayscale',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
