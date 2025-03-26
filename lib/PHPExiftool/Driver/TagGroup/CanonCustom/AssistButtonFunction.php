<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AssistButtonFunction extends AbstractTagGroup
{
    protected string $id = 'CanonCustom:AssistButtonFunction';

    protected string $name = 'AssistButtonFunction';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Assist Button Function',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonCustom::Functions10D
             * line : 53392
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'CanonCustom::Functions10D.CanonCustom:AssistButtonFunction',
            'desc' => [
                'en' => 'Assist Button Function',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
