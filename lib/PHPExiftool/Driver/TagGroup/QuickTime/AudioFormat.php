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
class AudioFormat extends AbstractTagGroup
{
    protected string $id = 'QuickTime:AudioFormat';

    protected string $name = 'AudioFormat';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::AudioSampleDesc
             * line : 310422
             * type : undef
             * writable : false
             * count : 4
             * flags :
             */
            'id' => 'QuickTime::AudioSampleDesc.QuickTime:AudioFormat',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 4;
}
