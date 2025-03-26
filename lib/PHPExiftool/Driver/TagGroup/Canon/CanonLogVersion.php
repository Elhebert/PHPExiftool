<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CanonLogVersion extends AbstractTagGroup
{
    protected string $id = 'Canon:CanonLogVersion';

    protected string $name = 'CanonLogVersion';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Canon Log Version',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::LogInfo
             * line : 48876
             * type : int32s
             * writable : true
             * count :
             * flags :
             */
            'id' => 'Canon::LogInfo.Canon:CanonLogVersion',
            'desc' => [
                'en' => 'Canon Log Version',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
