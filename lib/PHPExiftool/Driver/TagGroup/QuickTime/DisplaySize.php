<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DisplaySize extends AbstractTagGroup
{
    protected string $id = 'QuickTime:DisplaySize';

    protected string $name = 'DisplaySize';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Display Size',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::Video
             * line : 230013
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::Video.QuickTime:DisplaySize',
            'desc' => [
                'en' => 'Display Size',
            ],
        ],
    ];

    protected int $count = 0;
}
