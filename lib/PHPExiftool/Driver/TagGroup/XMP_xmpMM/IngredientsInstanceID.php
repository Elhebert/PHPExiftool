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
class IngredientsInstanceID extends AbstractTagGroup
{
    protected string $id = 'XMP-xmpMM:IngredientsInstanceID';

    protected string $name = 'IngredientsInstanceID';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Ingredients Instance ID',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmpMM
             * line : 291944
             * type : string
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::xmpMM.XMP-xmpMM:IngredientsInstanceID',
            'desc' => [
                'en' => 'Ingredients Instance ID',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
