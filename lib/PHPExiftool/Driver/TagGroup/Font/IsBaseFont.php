<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Font;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class IsBaseFont extends AbstractTagGroup
{
    protected string $id = 'Font:IsBaseFont';

    protected string $name = 'IsBaseFont';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Is Base Font',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Font::AFM
             * line : 88717
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Font::AFM.Font:IsBaseFont',
            'desc' => [
                'en' => 'Is Base Font',
            ],
        ],
    ];

    protected int $count = 0;
}
