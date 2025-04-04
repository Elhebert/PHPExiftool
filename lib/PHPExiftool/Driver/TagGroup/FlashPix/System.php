<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FlashPix;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class System extends AbstractTagGroup
{
    protected string $id = 'FlashPix:System';

    protected string $name = 'System';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'System',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FlashPix::WordDocument
             * line : 88658
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FlashPix::WordDocument.FlashPix:System',
            'desc' => [
                'en' => 'System',
            ],
        ],
    ];

    protected int $count = 0;
}
