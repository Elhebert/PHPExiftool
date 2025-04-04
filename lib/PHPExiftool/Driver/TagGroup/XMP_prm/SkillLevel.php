<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_prm;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SkillLevel extends AbstractTagGroup
{
    protected string $id = 'XMP-prm:SkillLevel';

    protected string $name = 'SkillLevel';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Skill Level',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::prm
             * line : 290448
             * type : string
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'XMP::prm.XMP-prm:SkillLevel',
            'desc' => [
                'en' => 'Skill Level',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
