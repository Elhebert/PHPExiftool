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
class IngredientsManageUI extends AbstractTagGroup
{
    protected string $id = 'XMP-xmpMM:IngredientsManageUI';

    protected string $name = 'IngredientsManageUI';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Ingredients Manage UI',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmpMM
             * line : 291968
             * type : string
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::xmpMM.XMP-xmpMM:IngredientsManageUI',
            'desc' => [
                'en' => 'Ingredients Manage UI',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
