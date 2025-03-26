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
class SeqLevelIdx0 extends AbstractTagGroup
{
    protected string $id = 'QuickTime:SeqLevelIdx0';

    protected string $name = 'SeqLevelIdx0';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::AV1Config
             * line : 310298
             * type : int8u
             * writable : false
             * count :
             * flags : unknown
             */
            'id' => 'QuickTime::AV1Config.QuickTime:SeqLevelIdx0',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 32;
}
