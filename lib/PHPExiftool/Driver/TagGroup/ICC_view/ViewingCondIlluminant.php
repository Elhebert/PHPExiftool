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
        'en' => 'Viewing Cond Illuminant',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : ICC_Profile::ViewingConditions
             * line : 102093
             * type : fixed32s
             * writable : false
             * count : 3
             * flags :
             */
            'id' => 'ICC_Profile::ViewingConditions.ICC-view:ViewingCondIlluminant',
            'desc' => [
                'en' => 'Viewing Cond Illuminant',
            ],
        ],
    ];

    protected int $count = 3;
}
