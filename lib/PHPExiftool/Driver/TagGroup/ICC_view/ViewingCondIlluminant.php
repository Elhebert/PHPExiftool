<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ICC_view;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ViewingCondIlluminant extends AbstractTagGroup
{
    protected string $id = 'ICC-view:ViewingCondIlluminant';

    protected string $name = 'ViewingCondIlluminant';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : ICC_Profile::ViewingConditions
             * line : 147035
             * type : fixed32s
             * writable : false
             * count : 3
             * flags :
             */
            'id' => 'ICC_Profile::ViewingConditions.ICC-view:ViewingCondIlluminant',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 3;
}
