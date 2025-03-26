<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmpMM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class IngredientsLastURL extends AbstractTagGroup
{
    protected string $id = 'XMP-xmpMM:IngredientsLastURL';

    protected string $name = 'IngredientsLastURL';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Ingredients Last URL',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmpMM
             * line : 291950
             * type : string
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::xmpMM.XMP-xmpMM:IngredientsLastURL',
            'desc' => [
                'en' => 'Ingredients Last URL',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
