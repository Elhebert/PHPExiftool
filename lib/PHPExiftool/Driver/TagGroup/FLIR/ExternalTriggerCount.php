<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FLIR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ExternalTriggerCount extends AbstractTagGroup
{
    protected string $id = 'FLIR:ExternalTriggerCount';

    protected string $name = 'ExternalTriggerCount';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'External Trigger Count',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FLIR::FPF
             * line : 85802
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FLIR::FPF.FLIR:ExternalTriggerCount',
            'desc' => [
                'en' => 'External Trigger Count',
            ],
        ],
    ];

    protected int $count = 0;
}
