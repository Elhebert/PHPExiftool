<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RelativePositionInSequenceName extends AbstractTagGroup
{
    protected string $id = 'MXF:RelativePositionInSequenceName';

    protected string $name = 'RelativePositionInSequenceName';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Relative Position In Sequence Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 114746
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:RelativePositionInSequenceName',
            'desc' => [
                'en' => 'Relative Position In Sequence Name',
            ],
        ],
    ];

    protected int $count = 0;
}
