<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonVRD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FaithfulRawHighlight extends AbstractTagGroup
{
    protected string $id = 'CanonVRD:FaithfulRawHighlight';

    protected string $name = 'FaithfulRawHighlight';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Faithful Raw Highlight',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonVRD::Ver2
             * line : 61257
             * type : int16s
             * writable : true
             * count :
             * flags :
             */
            'id' => 'CanonVRD::Ver2.CanonVRD:FaithfulRawHighlight',
            'desc' => [
                'en' => 'Faithful Raw Highlight',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
