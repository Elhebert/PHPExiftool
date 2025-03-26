<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ID3v2_2;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OriginalFileName extends AbstractTagGroup
{
    protected string $id = 'ID3v2_2:OriginalFileName';

    protected string $name = 'OriginalFileName';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Original File Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : ID3::v2_2
             * line : 103038
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'ID3::v2_2.ID3v2_2:OriginalFileName',
            'desc' => [
                'en' => 'Original File Name',
            ],
        ],
    ];

    protected int $count = 0;
}
